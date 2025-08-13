<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\OtpCode;

class SendOtpJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $mobile;

    public function __construct($mobile)
    {
        $this->mobile = $mobile;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $code = rand(100000, 999999);
        OtpCode::create([
               'mobile' => $this->mobile,
               'code' => $code,
               'expires_at' => now()->addMinutes(5),
           ]);
        \Log::info("OTP {$code} generated for {$this->mobile}");
    }
}
