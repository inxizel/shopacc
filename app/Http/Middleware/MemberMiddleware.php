<?php

namespace App\Http\Middleware;


use Cookie;
use Closure;
use Zent\Member\Models\Member;

class MemberMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $uid = Cookie::get('uid');
        $ver = Cookie::get('ver');

        if($uid == '' || $ver != 4){
            // set cookie
            $uid = md5(time().rand(0,9999));
            $ver = 4;
            // save database
            $member['uid'] = $uid;
            Member::create($member);

            return $next($request)
            ->withCookie(cookie()->forever('uid', $uid))
            ->withCookie(cookie()->forever('ver', $ver));

        }

        return $next($request);
    }
}
