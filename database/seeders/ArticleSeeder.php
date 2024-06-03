<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::factory()->create([
            'title' => 'Boldly Go Where No Programmer Has Gone Before: Starfleet Edition',
            'img_url' => '/img/spock.png',
            'excerpt' => 'Explore the final frontier of coding with Starfleet Edition. Set phasers to code and
                            embark on a journey through the vast reaches of programming space.',
            'body' => '<p>Attention all Trekkies and code enthusiasts – prepare to embark on an intergalactic
                        coding adventure with Starfleet Edition. Our app is your ticket to exploring the final
                        frontier of programming, where the possibilities are as endless as the stars themselves.</p>

                        <p><strong>Engage Warp Drive</strong></p>

                        <p>With Starfleet Edition, you can code like a true member of Starfleet. Our app features a
                        futuristic interface inspired by the iconic LCARS system, allowing you to navigate your
                        coding projects with ease. Whether you\'re writing algorithms or designing user interfaces,
                        Starfleet Edition provides the tools you need to boldly go where no programmer has gone
                        before.</p>

                        <p><i>Set your phasers to code and prepare for a coding experience that\'s out of this
                        world.</i></p>

                        <p><strong>Spaceships and Syntax</strong></p>

                        <p>But Starfleet Edition isn\'t just about coding – it\'s also about the thrill of space
                        exploration. Our app allows you to immerse yourself in the world of Starfleet, with detailed
                        information about iconic spaceships like the USS Enterprise and the USS Voyager. Whether
                        you\'re a fan of classic starships or cutting-edge designs, Starfleet Edition has something
                        for every aspiring spacefarer.</p>

                        <p><i>So grab your tricorder and your coding keyboard – with Starfleet Edition, the final
                        frontier of programming awaits.</i></p>'
        ]);
        Article::factory()->create([
            'title' => 'Space Jam: Code Your Way to the Stars with Starship Programming',
            'img_url' => '/img/federation.png',
            'excerpt' => 'Blast off into the cosmos of coding with Starship Programming. Explore the galaxies of
                            programming possibilities while navigating the stars.',
            'body' => '<p>Attention aspiring space cadets and coding aficionados – prepare for an out-of-this-world
                        coding experience with Starship Programming. Our platform is your launchpad into the vast
                        universe of programming, where every line of code is a step closer to the stars.</p>

                        <p><strong>Galactic Coding Adventures</strong></p>

                        <p>With Starship Programming, you\'ll embark on coding missions that span across the
                        galaxies. From debugging alien algorithms to building interstellar software systems, our
                        platform equips you with the tools and knowledge to navigate the complexities of space-age
                        programming.</p>

                        <p><i>Get ready to defy gravity and push the boundaries of coding with Starship
                        Programming.</i></p>

                        <p><strong>Starship Simulator</strong></p>

                        <p>But Starship Programming isn\'t just about coding – it\'s also about the thrill of space
                        exploration. Our starship simulator allows you to pilot iconic spacecraft from your
                        favorite sci-fi franchises, including the Millennium Falcon, the USS Enterprise, and the
                        Serenity. Experience the excitement of interstellar travel while honing your coding
                        skills.</p>

                        <p><i>Prepare for liftoff and strap in for an exhilarating journey through the cosmos of
                        coding with Starship Programming.</i></p>
    '
        ]);
        Article::factory()->create([
            'title' => 'Differences Between Star Trek NCC-1701 and NCC-1701-D',
            'img_url' => '/img/enterprise.png',
            'excerpt' => 'Explore the distinctions between the iconic starships NCC-1701 and NCC-1701-D.',
            'body' => '<p>Discover the contrasting features of the legendary starships from Star Trek: the USS Enterprise NCC-1701 and NCC-1701-D.</p>

                <p><strong>USS Enterprise NCC-1701</strong></p>

                <p>The original USS Enterprise, NCC-1701, commanded by James T. Kirk, represents the pioneering spirit of space exploration. It featured a sleek saucer-shaped hull and a cylindrical engine section. With its smaller size and simpler design, the NCC-1701 paved the way for humanity\'s journey into the final frontier.</p>

                <p><strong>USS Enterprise NCC-1701-D</strong></p>

                <p>In contrast, the USS Enterprise NCC-1701-D, under the command of Captain Jean-Luc Picard, exemplifies the next generation of starship technology. As a Galaxy-class vessel, it boasts a larger size and more advanced capabilities. Notable features include a separated saucer section, improved defensive systems, and state-of-the-art scientific facilities.</p>

                <p>By comparing these two iconic starships, we gain insight into the evolution of Starfleet technology and the ongoing exploration of the cosmos.</p>'
        ]);
        Article::factory()->create([
            'title' => 'The Unforgettable Voyage of the USS Enterprise: A Story of Discovery and Courage',
            'img_url' => '/img/enterprise.png',
            'excerpt' => 'Embark on a journey through space and time with the legendary USS Enterprise. Explore the
                            wonders of the cosmos and witness tales of bravery and exploration.',
            'body' => '<p>Join us on a remarkable voyage as we recount the unforgettable adventures of the USS
                        Enterprise. From the far reaches of the galaxy to the depths of the human spirit, the
                        Enterprise has ventured where no one has gone before, leaving an indelible mark on the
                        annals of history.</p>

                        <p><strong>Exploring the Final Frontier</strong></p>

                        <p>The USS Enterprise, under the command of the intrepid Captain James T. Kirk, has boldly
                        gone where no starship has gone before. From encountering strange new worlds to seeking
                        out new life and new civilizations, the Enterprise has traversed the cosmos in search of
                        knowledge, understanding, and peace.</p>

                        <p><i>Prepare to be captivated by tales of discovery and wonder as we delve into the
                        archives of the USS Enterprise\'s most thrilling missions.</i></p>

                        <p><strong>Courage Under Fire</strong></p>

                        <p>But the journey of the USS Enterprise has not been without its challenges. From facing
                        off against formidable adversaries like the Klingons and the Borg to confronting the
                        mysteries of the universe itself, the crew of the Enterprise has demonstrated unparalleled
                        courage and resilience in the face of danger.</p>

                        <p><i>Join us as we celebrate the triumphs and tribulations of the USS Enterprise and its
                        brave crew.</i></p>'
        ]);
        Article::factory()->create([
            'title' => 'The Wild Journey of the USS Discovery: A Tale of Adventure and Intrigue',
            'img_url' => '/img/discovery.png',
            'excerpt' => 'Embark on a whirlwind adventure with the USS Discovery. Brace yourself for unexpected
                            twists and turns as we navigate through the unknown.',
            'body' => '<p>Hold on tight as we recount the thrilling escapades of the USS Discovery. This remarkable
                        starship has charted a course through uncharted territory, encountering mysteries and
                        challenges at every turn.</p>

                        <p><strong>Into the Unknown</strong></p>

                        <p>The USS Discovery, led by the fearless Captain Gabriel Lorca, has ventured into the
                        depths of space in search of answers and adventure. From navigating treacherous nebulae to
                        unraveling the secrets of ancient civilizations, the Discovery has boldly gone where no one
                        has gone before.</p>

                        <p><i>Prepare to be swept away on a journey of discovery and wonder as we uncover the
                        untold stories of the USS Discovery\'s most daring missions.</i></p>

                        <p><strong>Danger Lurks in the Shadows</strong></p>

                        <p>But the voyage of the USS Discovery has not been without its share of dangers. From
                        encountering hostile alien species to uncovering sinister plots within Starfleet itself,
                        the crew of the Discovery has faced challenges that would test the resolve of even the
                        bravest souls.</p>

                        <p><i>Join us as we delve into the heart of darkness and shine a light on the courageous
                        deeds of the USS Discovery and its valiant crew.</i></p>'
        ]);
        Article::factory()->create([
            'title' => 'Disaster Strikes: The Catastrophic Overhaul of the USS Defiant',
            'img_url' => '/img/starbase.png',
            'excerpt' => 'Witness the harrowing tale of the USS Defiant\'s ill-fated overhaul. Delve into the
                            chaos and aftermath of a mission gone horribly wrong.',
            'body' => '<p>Prepare for a heart-wrenching saga as we recount the tragic events surrounding the USS
                        Defiant\'s catastrophic overhaul. What began as a routine maintenance procedure quickly
                        spiraled into a nightmare of epic proportions.</p>

                        <p><strong>Overhaul Gone Awry</strong></p>

                        <p>The USS Defiant, a stalwart vessel of Starfleet, was scheduled for a routine overhaul at
                        Starbase 24. However, what should have been a simple upgrade to the ship\'s systems quickly
                        turned into a disaster of unprecedented magnitude. Technical glitches, miscommunications,
                        and unforeseen complications plagued the overhaul from the start, leading to a series of
                        catastrophic failures that threatened the very survival of the ship and its crew.</p>

                        <p><i>Join us as we unravel the chain of events that led to the downfall of the USS Defiant
                        and its valiant crew.</i></p>

                        <p><strong>A Race Against Time</strong></p>

                        <p>As chaos ensued aboard the USS Defiant, the crew found themselves in a desperate
                        struggle for survival. With systems failing and danger lurking around every corner, Captain
                        Benjamin Sisko and his crew must band together to overcome the odds and find a way to
                        escape the clutches of certain doom.</p>

                        <p><i>Witness the courage and resilience of the USS Defiant\'s crew as they face their
                        darkest hour in a battle for survival.</i></p>'
        ]);
    }
}
