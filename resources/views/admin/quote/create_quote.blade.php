<button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#quoteModal" data-bs-whatever="@getbootstrap">Create New Quote</button>

<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabel">New Quote Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('quote.create')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Select Author</label>
                        <select class="form-select" name="author_id" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            @foreach($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Quote</label>
                        <textarea class="form-control" id="message-text" name="quote"></textarea>
                    </div>
                    <input type="submit" class="btn btn-success" value="Post">
                </form>
            </div>
        </div>
    </div>
</div>

