<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news_terkini = [
            [
                "title" => "Valorant Gaming News",
                "slug" => "gaming/Valorant Pros GamePlay",
                "author" => "Wazir Qorni Abud",
                "news" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, dolor. Maiores cumque debitis voluptate minus, quam aspernatur? 
                Deleniti quaerat magnam ullam recusandae maxime inventore itaque culpa odio deserunt, unde quidem corrupti, reprehenderit delectus, 
                officia sequi? Vel tempora illo placeat nam voluptas, hic maiores cumque nihil odio officia, dicta minima eaque, ex ullam totam? 
                Quibusdam provident, dolore dolorem, laborum hic, quaerat magni tempora nostrum quisquam 
                quo laudantium ut voluptatibus? Ad adipisci deserunt unde a mollitia voluptatibus cum consectetur tempora neque velit."
            ],
            [
                "title" => "Jae Hyuk Treasure",
                "slug" => "kpop/Jae Huk Treasure",
                "author" => "Aulia Nafasa Herawati",
                "news" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt quae sunt voluptatem quisquam ipsam numquam quia dicta 
                alias voluptas, asperiores possimus ut voluptate vitae iusto repellat tempora incidunt ab dolor necessitatibus itaque exercitationem, 
                optio omnis. Dolor deserunt quae odio nesciunt aliquid necessitatibus consectetur eaque ullam dicta, aspernatur natus odit error nulla
                , possimus nemo minima delectus explicabo minus iste cumque asperiores numquam. Nihil nam ducimus qui libero saepe recusandae. Eveniet 
                odit enim pariatur ipsum doloribus ex ut! Quas facere impedit, saepe doloremque unde pariatur! Quisquam itaque ullam corporis, 
                asperiores dicta ab totam. Aut temporibus velit, soluta repellat fuga nihil minima officiis.
                "
            ],
            [
                "title" => "Nvidia GeForce RTX 3080 Ti News",
                "slug" => "tech/Nvidia GeForce RTX 3080 TI",
                "author" => "Dadang Surya",
                "news" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente soluta hic autem placeat, quia commodi atque nobis 
                voluptatum doloribus quas fugiat! Ipsum, aliquid error. Laborum distinctio odio atque assumenda cupiditate labore quibusdam eveniet 
                voluptatem doloremque ab, perferendis sit voluptatum laboriosam neque esse nulla non. Quis, doloremque delectus facere sit corrupti 
                omnis et! Suscipit consequatur fugiat laboriosam perferendis nihil sequi ipsa, voluptates eum saepe, similique rem. Commodi 
                exercitationem cum natus rem reiciendis. Fugit reprehenderit dolorum ab repellat beatae aliquid consequuntur temporibus quisquam 
                minima molestiae officia, quam natus accusamus, qui exercitationem voluptates corporis quo. Tempora assumenda maxime voluptas mollitia
                voluptate beatae perferendis minus. Officiis, eaque modi. Labore accusamus praesentium consequuntur alias, 
                cupiditate mollitia reprehenderit temporibus doloremque iste itaque provident enim sequi aut?
                "
            ],
        ];
        return view('news', 
        ['title' => 'News',
        'news' => $news_terkini]);
    }

    public function kpop($slug)
    {
        return view('news-kpop',
                ['slug' => $slug],
                ['title' => 'K-POP']
            );
    }

    public function gaming($slug)
    {
        return view('news-gaming', 
        ['slug' => $slug],
        ['title' => 'Gaming']
);
    }

    public function tech($slug)
    {
        return view('news-tech', 
        ['slug' => $slug],
        ['title' => 'Gaming']
    );
    }
}
