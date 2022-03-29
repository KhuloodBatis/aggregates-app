<h1>{{ $user->name }}</h1>


<ul>
    <li>

        {{ $user->articles_count }} {{ Str::plural('articles', $user->articles_count) }}
    </li>

    <li>

        {{ $user->articles_sum_votes }} article {{ Str::plural('votes', $user->articles_sum_votes) }}

    </li>

    <li>

        {{ $user->comments_count }} {{ Str::plural('comments', $user->comments_count) }}
    </li>

    <li>

        {{ $user->comments_deleted_count }} delete {{ Str::plural('comments', $user->comments_deleted_count) }}
    </li>


</ul>
