<?php

namespace App\Models\Corcel;

use Spatie\Feed\Feedable;
use Spatie\Feed\FeedItem;
use Corcel\Model\Post as Corcel;

class Post extends Corcel implements Feedable
{
    public function toFeedItem(): FeedItem
    {
        return FeedItem::create()
            ->id($this->ID)
            ->title($this->title)
            ->summary($this->post_content)
            ->updated($this->updated_at)
            ->link(route('posts.show', $this->post_name))
            ->authorName($this->author->user_nicename)
            ->authorEmail($this->author->user_email);
    }

    public static function getFeedItems()
    {
        return Post::with([
            'author'
        ])
            ->where('post_type', 'post')
            ->published()
            ->latest()
            ->take(10)
            ->get();
    }
}
