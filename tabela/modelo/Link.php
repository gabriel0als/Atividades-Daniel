<?php

class Link {
    private string $linkImg;
    private string $info;

    public function __construct($link, $info) {
        $this->linkImg = $link;
        $this->info = $info;
    }

    public function getLinkImg() {
        return $this->linkImg;
    }

    public function getInfo() {
        return $this->info;
    }

}

?>