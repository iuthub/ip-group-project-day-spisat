<?php

use Illuminate\Database\Seeder;
use App\Post;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $post = new Post([
        //     'title' => 'Lorem',
        //     'body' => 'heree'
        // ]);
        // $post->save();


        DB::table('posts')->insert([
            'title' => 'Java Developer.',
            'body' => 'We are looking for Java/J2ee with Angular 7 & above and Spring Developer • At least 6 years of professional software development experience, with below-required skills • Experience in designing, implementing and delivering high performance and complex Java EE solutions and should be a solution provider • Experience developing web applications using Angular 7 & above • Experience developing applications using Spring Boot and service-oriented architectures • Experience in working on Spring Batch • Experience in Java 9 &11 and Java streaming • Experience working with Java, J2EE, Spring MVC, JavaScript, HTML5, CSS, and Rest API. • Deep understanding of UI technologies such as jQuery, Angular 7 & above, and integrating with Spring framework.'
        ]);

        DB::table('posts')->insert([
            'title' => 'Teacher',
            'body' => 'Are you a experienced Primary PYP Teachers and want some adventures?** • *travel and teach in the sunny Singapore This private international school located in one of the quiet residential area in Singapore. This school has Early Years department and Primary department for students aged 2-13 and it offers International Baccalaureate Primary Years Programme (PYP) for students from Year 1-6 The school facilities are well-equipped including air conditioned classrooms, library, IT labs, indoor and outdoor playground and gymnasium'
        ]);

        DB::table('posts')->insert([
            'title' => 'Java developing teacher',
            'body' => 'Develop using the following technologies / concepts: Service Oriented Architecture (SOA), Single Page Applications (SPA), Message-Based Architecture, Javascript, CSS, UI frameworks (Node.js, Angular, Backbone, etc.) Design, develop using TFA’s standardized architecture practices (and ensuring that developers are also following these practices) Write unit tests, perform code analysis, and automate common actions in our CI/CD environment Actively influence evolving application architecture Participate in all aspects of Teach For America’s agile software development cycle (including scrum processes, assessment, planning, design, development, testing, and support.) - 10%'

        ]);
        DB::table('posts')->insert([
            'title' => 'Maternal Health Technical Specialist,',
            'body' => 'ob Title: Maternal Health Technical Specialist, Guinea-Bissau, P-3 Job ID: 30503 Location: West and Central Africa Full/Part Time: Full-Time Regular/Temporary: Regular Rotation: This post is non-rotational: Work-experience: 5 years'
        ]);
    }
}
