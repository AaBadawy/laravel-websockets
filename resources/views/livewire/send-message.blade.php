<div>
    <form  wire:submit.prevent="save">
        <textarea name="body" id="" cols="30" rows="10" wire:model.defer="body"></textarea>
        <select name="recipient" id="" wire:model="recipient">
            @foreach($users as $user)
                <option value="{{$user->id}}" selected>{{$user->name}}</option>
            @endforeach
        </select>
        <input type="submit" class="btn btn-primary" value="Send">
    </form>
</div>
