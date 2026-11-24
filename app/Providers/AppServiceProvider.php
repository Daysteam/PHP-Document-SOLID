<?php

namespace App\Providers;

use App\Contracts\Interfaces\SiswaNotifyInterface;
use App\Contracts\Interfaces\SiswaRepositoryInterface;
use App\Contracts\Repositories\SiswaRepository;
use App\Exports\CsvExporter;
use App\Exports\ExcelExporter;
use App\Exports\PdfExporter;
use App\Services\ExportManager;
use App\Services\Notify\EmailNotify;
use App\Services\PrinterManager;
use App\Services\Sender\DownloadSender;
use App\Services\Sender\EmailSender;
use App\Services\Sender\PrinterSender;
use App\Services\Sender\WhatsAppSender;
use App\Services\SenderManager;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Siswa
        $this->app->bind(SiswaRepositoryInterface::class, SiswaRepository::class);
        // Export Manager
        $this->app->singleton(ExportManager::class, function ($app) {
            return new ExportManager([
                'pdf' => $app->make(PdfExporter::class),
                'excel' => $app->make(ExcelExporter::class),
                'csv' => $app->make(CsvExporter::class)
            ]);
        });
        // Sender Manager
        $this->app->singleton(SenderManager::class, function ($app) {
            return new SenderManager([
                'email' => $app->make(EmailSender::class),
                'download' => $app->make(DownloadSender::class),
                'whatsapp' => $app->make(WhatsAppSender::class),
            ]);
        });
        // Printer Manager
        $this->app->singleton(PrinterManager::class, function ($app) {
            return new PrinterManager([
                'printer' => $app->make(PrinterSender::class),
            ]);
        });
        // EmailNotify
        $this->app->bind(SiswaNotifyInterface::class, EmailNotify::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
