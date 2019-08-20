<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Article;

class OwnerMiddleware
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
        $articleId = $request->segments()[1];
        $article = Article::findOrFail($articleId);
        if ($article->ownsAuthorizedUser())
            return $next($request);
        return back();
    }
}
