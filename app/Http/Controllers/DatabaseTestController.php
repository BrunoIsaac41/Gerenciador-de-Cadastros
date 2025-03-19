<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DbTestController extends Controller
{
    public function testConnection()
    {
        try {
            // Test database connection
            DB::connection()->getPdo();
            
            // Optional: Run a simple query
            $results = DB::select('SELECT 1');
            
            // Return success response
            return response()->json([
                'status' => 'success',
                'message' => 'Database connection successful!',
                'connection_details' => [
                    'driver' => DB::connection()->getDriverName(),
                    'database' => DB::connection()->getDatabaseName(),
                ]
            ]);
        } catch (Exception $e) {
            // Return error details
            return response()->json([
                'status' => 'error',
                'message' => 'Database connection failed',
                'error' => $e->getMessage(),
                'error_trace' => $e->getTraceAsString()
            ], 500);
        }
    }
}
