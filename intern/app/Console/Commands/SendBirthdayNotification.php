<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\Employee;
use Carbon\Carbon;

class SendBirthdayNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:birthday-notification';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email notifications to employees on their birthday';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {

         $today = Carbon::today()->format('m-d');

         $employees = Employee::whereRaw("DATE_FORMAT(date_of_birth, '%m-%d') = ?", [$today])->get();
 
         foreach ($employees as $employee) {
            Mail::to($employee->email)->send(new BirthdayNotification($employee));
            $this->info("Birthday notification sent to {$employee->name} ({$employee->email}).");
        }

        $this->info('Birthday notifications sent successfully.');
    }
}
