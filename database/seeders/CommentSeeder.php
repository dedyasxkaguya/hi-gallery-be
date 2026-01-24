<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas= [
    // --- Positive & Enthusiastic Comments ---
    'nice', 'great', 'wonderful', 'magnificent', 'marvelous', 'love your work',
    'your art is very great', 'following rn', 'always a great result',
    'This is absolutely stunning! 😍', "You're so talented!", 'Goals!',
    'This made my day. Thank you for sharing.', 'Incredible work as always.',
    'I keep coming back to this post. So good.', 'The color palette is perfect!',
    'PERFECTION. 🔥', 'This deserves more likes!', 'How is this even real? 🤯',
    'Obsessed with this.', 'You just gained a new follower.', 'Masterpiece.',
    'Saving this for inspiration.', 'The detail is insane!', 'I have no words. ❤️',
    'This hit different.', 'Please never stop creating.', 'Wow, just wow.',
    'The algorithm blessed me with this today.', 'Clicked so fast! 👏',
    'This is the best one yet.', 'Can I get this as a print?', 'Genius!',
    'I see what you did there.', 'Interesting point of view.',
    "Not sure I agree, but I get where you're coming from.",
    'This is one way to do it, I guess.', 'Reminds me of something else.',
    'Following the discussion.', 'Could you explain the second step more?',
    'Posted a similar thing last year.', 'The data in chart 3 is surprising.',
    'First.', 'Interesting choice.', 'I need to think about this.',
    'Seen this trend a lot lately.', 'What software did you use for this?',
    'The composition is... a choice.', 'Not what I was expecting to see.',
    'I`m here for the comments.', 'Waiting for the tutorial.',
    '@friendname, thoughts?', 'This is getting shared in the group chat.',
    'Bookmarking to watch later.', 'The background music fits well.',
    "I think there's room for improvement on the details.",
    'The idea is good, but the execution feels a bit rushed.',
    'Maybe try a different angle next time?',
    "Honestly, this isn't my favorite from you.",
    'I liked your previous project better, sorry.',
    'The concept is cool, but the colors are a bit off for me.',
    "It's not bad, just not what I was expecting.",
    'Might look better with a simpler background.',
    'The lighting looks a bit flat to me.',
    'I feel like the message gets a bit lost.',
    'Kinda mid, not gonna lie.', 'Did you consider trying...?',
    'I think the other version was stronger.',
    'It`s a bit busy for my taste.', 'The text is hard to read.',
    'Promise I`m not hating, just giving feedback!',
    'This feels a bit derivative of @otheruser`s style.',
    'Might work better as a series.', 'Respectfully, I disagree with the take.',
    'Love you, but this one didn`t land for me.',

    // --- Questions for the Author ---
    'How long did this take you to make?',
    'What was your inspiration for this piece?',
    'Can you share the tools/brushes you used?',
    'Is this part of a larger series?',
    'Would you ever consider making a tutorial?',
    'What advice would you give to someone starting out?',
    'Where can I get the high-resolution version?',
    'Are you planning to sell prints of this?',
    'What does this represent to you personally?',
    'How did you get the idea for the color scheme?',
    'What was the most challenging part?',
    'Do you take commissions?',
    'What song were you listening to while creating this?',
    'Any behind-the-scenes footage? 👀',
    'Is there a story behind the main character?',

    // --- Casual & Conversational Comments (Updated Slang) ---
    'This is so real.', 'Mood.', 'Same.',
    'Why is this so relatable? 😂', 'That part!',
    'You ate and left no crumbs.', 'They never miss.',
    'Who asked? (joking)', 'This you? @friendname',
    'Me, waiting for the update:', 'The scream I scrumpt.',
    'I know that`s right.', 'Found my twin in the comments.',
    'Tell me without telling me.', 'Plot twist.',
    'It`s the [specific detail] for me.', 'I felt that.',
    'Okay, but why does this actually work?',
    'Nobody: ... Absolutely nobody: ... You: [this post]',
    // --- New Modern Slang Additions ---
    'This is bussin\'! 🚀', 'No cap, this is fire.', 'Sheesh! The quality!',
    'It\'s giving masterpiece. 💅', 'You snapped for real.',
    'Main character energy right here.', 'This lives in my head rent-free.',
    'I just know the vision was clear.', 'The gag is... it actually works.',
    'Not you doing it like that! 😭', 'This is my 13th reason.',
    'You understood the assignment.', 'The way I just screenshotted...',
    'I\'m stealing this for my mood board.', 'This sent me.',
    'You are *not* serious with this!', 'Go off, I guess!'
];

        $i = 0;
        while ($i <= 2) {
            foreach ($datas as $data) {
                DB::table('comments')->insert([
                    'user_id' => User::all()->random()->id,
                    'post_id' => Post::all()->random()->id,
                    'comment' => $data,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
            $i++;
        }
    }
}
