<?php


namespace myapp\controllers;


class homeHandler extends SecureAPI
{
    function getPostsAction(){
        $this->setVar("posts", [
            [
                "title"=> "Post 1",
                "description" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing "
            ],
            [
                "title"=> "Post 2",
                "description" => "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing "
            ]
        ]);

        $this->toJSON();
    }
}