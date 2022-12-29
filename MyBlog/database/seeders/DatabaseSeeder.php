<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            //'name' => 'Arslan'
        ]);
        Post::factory(15)->create([
            'user_id' => $user->id
        ]);
//         $user = User::factory()->create();
//
//         $personal = Category::create([
//             'name' => 'Personal',
//             'slug' => 'personal'
//         ]);
//        $family = Category::create([
//             'name' => 'Family',
//             'slug' => 'family'
//         ]);
//        $work = Category::create([
//             'name' => 'Work',
//             'slug' => 'work'
//         ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $personal->id,
//            'title' => 'My Personal Post',
//            'slug' => 'my-personal-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
//            'body' => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni harum quod quo illo cum optio, molestias in sint eius suscipit numquam velit, et, architecto vero repellat provident non aspernatur? Fugit voluptates quos deserunt culpa expedita eius repellat iusto quas? Accusamus minus, similique et adipisci veniam aut velit quibusdam quas blanditiis perspiciatis voluptatem, vero aperiam quaerat quos, in impedit doloremque. Ea, facilis ratione suscipit commodi a labore fugiat quaerat, provident dolor voluptas nostrum aut! Quos ex quisquam neque, voluptatem esse accusantium exercitationem voluptas minima? Laudantium et, sit aliqui hic incidunt mollitia est molestias fugit nihil illo maiores, sunt velit? Repellendus asperiores eaque ratione expedita molestiae rerum et ipsa soluta molestias? Cupiditate nobis officiis natus, voluptatibus ea repellat ad iste nihil distinctio, harum illo maiores enim, perferendis porro suscipit. Nemo, aliquam obcaecati.</p>"
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-family-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
//            'body' => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni harum quod quo illo cum optio, molestias in sint eius suscipit numquam velit, et, architecto vero repellat provident non aspernatur? Fugit voluptates quos deserunt culpa expedita eius repellat iusto quas? Accusamus minus, similique et adipisci veniam aut velit quibusdam quas blanditiis perspiciatis voluptatem, vero aperiam quaerat quos, in impedit doloremque. Ea, facilis ratione suscipit commodi a labore fugiat quaerat, provident dolor voluptas nostrum aut! Quos ex quisquam neque, voluptatem esse accusantium exercitationem voluptas minima? Laudantium et, sit aliqui hic incidunt mollitia est molestias fugit nihil illo maiores, sunt velit? Repellendus asperiores eaque ratione expedita molestiae rerum et ipsa soluta molestias? Cupiditate nobis officiis natus, voluptatibus ea repellat ad iste nihil distinctio, harum illo maiores enim, perferendis porro suscipit. Nemo, aliquam obcaecati.</p>"
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit',
//            'body' => "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni harum quod quo illo cum optio, molestias in sint eius suscipit numquam velit, et, architecto vero repellat provident non aspernatur? Fugit voluptates quos deserunt culpa expedita eius repellat iusto quas? Accusamus minus, similique et adipisci veniam aut velit quibusdam quas blanditiis perspiciatis voluptatem, vero aperiam quaerat quos, in impedit doloremque. Ea, facilis ratione suscipit commodi a labore fugiat quaerat, provident dolor voluptas nostrum aut! Quos ex quisquam neque, voluptatem esse accusantium exercitationem voluptas minima? Laudantium et, sit aliqui hic incidunt mollitia est molestias fugit nihil illo maiores, sunt velit? Repellendus asperiores eaque ratione expedita molestiae rerum et ipsa soluta molestias? Cupiditate nobis officiis natus, voluptatibus ea repellat ad iste nihil distinctio, harum illo maiores enim, perferendis porro suscipit. Nemo, aliquam obcaecati.</p>"
//        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
