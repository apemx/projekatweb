<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
      
    }
    /**
     * Blade component
     */
    public function boot(): void
    {
        Blade::component('atoms.block','block');
        Blade::component('atoms.tableRow','tablerow');
        Blade::component('atoms.emptyCard','card-table');
        Blade::component('atoms.button.delete','btn-delete');
        Blade::component('atoms.button.logout','btn-logout');
        Blade::component('atoms.button.back','btn-back');

        Blade::component('molecules.table','table-custom');
        Blade::component('molecules.searchbar','search-bar');
        Blade::component('molecules.modal.pop-up-modal','modal-pop-up');
        Blade::component('molecules.paginationbar','pagination-bar');
        Blade::component('molecules.modal.edit-modal','modal-edit');
        Blade::component('molecules.InputField','input-field');
        Blade::component('molecules.authButtons','btns-auth');
        Blade::component('molecules.card','card');
        Blade::component('molecules.chatbox','chatbox');


        Blade::component('organisms.navigation','navigation');

        Blade::component('template.page','app');

    }
}
