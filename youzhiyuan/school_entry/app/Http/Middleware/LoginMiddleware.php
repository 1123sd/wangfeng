<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * 返回请求过滤器
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $name = $request->session()->get('username');
        if($name==""){
            echo "<script>alert('请先登录');location.href='login.html'</script>";
        }else{
            return $next($request);
        } 
    }

}