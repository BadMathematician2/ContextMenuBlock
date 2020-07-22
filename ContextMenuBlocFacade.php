<?php


namespace ContextMenuBlock;


use Illuminate\Support\Facades\Facade;

class ContextMenuBlocFacade extends Facade
{
        protected static function getFacadeAccessor()
        {
            return 'ContextMenu';
        }
}
