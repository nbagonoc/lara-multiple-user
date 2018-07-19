<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Charts;
// use ConsoleTVs\Charts\Facades\Charts;
// use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ChartJS
        $users = User::where('role', 'user')->get();
        $adminRole = User::where('role','admin')->get()->count();
        $moderatorRole = User::where('role','moderator')->get()->count();
        $userRole = User::where('role','user')->get()->count();

        $chart = Charts::database($users, 'bar','highcharts')
                ->title('Monthly Sing-up')
                ->elementLabel('Total Users')
                ->responsive(true)
                ->groupByMonth(date('Y'),true);
                
        $pieChart = Charts::create('pie','highcharts')
                ->title('User Roles')
                ->labels(['Administrators','Moderators','Users'])
                ->values([$adminRole,$moderatorRole,$userRole])
                ->responsive(true);
        // End ChartJS

        return view('pages.dashboard',compact('chart','pieChart'));
    }
}
