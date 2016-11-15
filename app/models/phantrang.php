<?php
class phantrang extends Illuminate\Pagination\Presenter {

    public function getActivePageWrapper($text)
    {
        return '<strong>'.$text.'</strong>';
    }

    public function getDisabledTextWrapper($text)
    {
		return false;
    }

    public function getPageLinkWrapper($url, $page, $rel = null)
    {
		return '<a href="'.$url.'">'.$page.'</a>';
    }

}