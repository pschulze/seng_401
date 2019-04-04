<table class="table table-striped">
  <thead>
      <tr>
        <td>Title</td>
        <td>Year</td>
        <td>Overview</td>
        <td>Runtime</td>
        <td>Certification</td>
        <td>Country</td>
        <td>Rating</td>
        <td>Language</td>
        <td>Actions</td>
      </tr>
  </thead>
  <tbody>
    @foreach($contents as $content)
    <tr>
      <td>{{$content->title}}</td>
      <td>{{$content->year}}</td>
      <td>{{$content->overview}}</td>
      <td>{{$content->runtime}}</td>
      <td>{{$content->certification}}</td>
      <td>{{$content->country}}</td>
      <td>{{$content->rating}}</td>
      <td>{{$content->language}}</td>
      <td>{{$content->actions}}</td>
      <td>
        <!-- @if ($book->userSubscribed(Auth::user()))
        <form action="{{route('subscriptions.destroy_by_book_id', ['id' => $book->id])}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="btn" type="submit">Unsubscribe</button>
        </form>
        @else
        <form action="{{route('subscriptions.store', ['book_id' => $book->id])}}" method="POST">
            @csrf
            @method('POST')
            <button class="btn" type="submit">Subscribe</button>
        </form>
        @endif -->
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
