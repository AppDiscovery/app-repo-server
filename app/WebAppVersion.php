<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\WebAppVersion
 *
 * @mixin \Eloquent
 * @property int $id
 * @property int $web_app_id
 * @property string $version
 * @property string $code_bundle_url
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebAppVersion whereCodeBundleUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebAppVersion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebAppVersion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebAppVersion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebAppVersion whereVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebAppVersion whereWebAppId($value)
 */
class WebAppVersion extends Model
{
    //
}
