@if (isset($errors) && count($errors)>0)
    <div class="alert alert-warning ">
        <ul class="list-unstyled mb-0">
            @foreach ($errors->all() as $error)
            <li>
                <i class="fa-solid fa-triangle-exclamation"></i> &nbsp;{{ $error }}
            </li>
            
            @endforeach
        </ul>
    </div>
    
@endif

@if (Session::get('success', false))
    <?php $data = Session::get('success'); ?>
    @if (is_array($data))
        @foreach ($data as $message)
            <div class="alert alert-success">
                <i class="fa fa-check"></i>
                &nbsp;{{ $message }}
            </div>
        @endforeach
    
    @else
        <div class="alert alert-success alert-dismissible fade show">
            <i class="fa fa-check"></i>
            {{ $data }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    
@endif