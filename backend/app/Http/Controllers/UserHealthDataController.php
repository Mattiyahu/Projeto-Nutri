<?php

namespace App\Http\Controllers;

use App\Models\UserHealthData;
use App\Models\UserNutritionData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class UserHealthDataController extends Controller
{
    /**
     * Store health data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeHealthData(Request $request)
    {
        $request->validate([
            'mental_health_status' => 'required|string',
            'goals' => 'required|string',
            'challenges' => 'required|string',
            'motivation' => 'required|string',
        ]);

        try {
            $healthData = new UserHealthData();
            if (!Auth::check()) { // Use Auth facade
            return response()->json(['error' => 'User not authenticated.'], 401);
        }
        $healthData->user_id = Auth::id(); // Use Auth facade
            $healthData->mental_health_status = $request->mental_health_status;
            $healthData->goals = $request->goals;
            $healthData->challenges = $request->challenges;
            $healthData->motivation = $request->motivation;
            $healthData->save();

            return response()->json(['message' => 'Health data saved successfully.'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to save health data.'], 500);
        }
    }

    /**
     * Store nutrition data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeNutritionData(Request $request)
    {
        $request->validate([
            'calories' => 'required|integer',
            'meal_type' => 'required|string',
        ]);

        try {
            $nutritionData = new UserNutritionData();
            if (!Auth::check()) { // Use Auth facade
            return response()->json(['error' => 'User not authenticated.'], 401);
        }
        $nutritionData->user_id = Auth::id(); // Use Auth facade
            $nutritionData->calories = $request->calories;
            $nutritionData->meal_type = $request->meal_type;
            $nutritionData->save();

            return response()->json(['message' => 'Nutrition data saved successfully.'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to save nutrition data.'], 500);
        }
    }
}
