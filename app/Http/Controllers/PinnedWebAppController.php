<?php
/**
 * Created by PhpStorm.
 * User: bz302
 * Date: 2018/9/30
 * Time: 8:13
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

Class PinnedWebAppController extends Controller {
    public function deploy(Request $request) {
        \DB::beginTransaction();

        $app = \App\WebApp::whereName($request->app_name)->first();
        if(!$app) {
            $successful = false;
            $info = 'App not found, please check the app name.';
            return compact('successful', 'info');
        }

        $web_app_id=$app->id;
        $pinned_app = new \App\PinnedWebApp();
        $pinned_app->web_app_id = $web_app_id;
        $pinned_app->priority = $request->priority;
        $pinned_app->launch_params_json = $request->launch_params_json;
        $pinned_app->display_name = $request->display_name;
        $pinned_app->save();

        $return_data = \App\PinnedWebApp::whereWebAppId($web_app_id)->get();
        \DB::commit();
        $successful = true;
        return compact('successful', 'app', 'return_data');
    }
}