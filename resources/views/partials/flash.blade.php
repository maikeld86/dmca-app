@if(Session::has('flass_message'))
    <div class="alert alert-success {{ Session::has('flass_message_important') ? 'alert-important' : '' }}" >
        @if(Session::has('flass_message_important'))
           <div class="alert alert-success">
               <div type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</div>
               {{ Session::get('flass_message') }}
           </div>
        @endif
        {{ Session::get('flass_message') }}
    </div>
@endif