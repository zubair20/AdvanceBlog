@extends('layouts.manage')

@section('content')
    <div class="flex-container">
        <div class="columns m-t-10">
            <div class="column">
                <h1 class="title">Create new User</h1>
            </div>
        </div>
        <div class="columns">
            <div class="column">
                <form action="{{route('users.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <p class="control">
                            <input type="text" name="name" id="name" class="input">
                        </p>
                    </div>
                    <div class="field">
                        <label for="email" class="label">Email:</label>
                        <p class="control">
                            <input type="text" name="email" id="email" class="input">
                        </p>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                            <input type="password" name="password" id="password" class="input" v-if="!auto_password" placeholder="Manually give a password to this user">
                            <b-checkbox name="auto_generate" class="m-t-15" v-model="auto_password" :checked="true">Auto Generate Password</b-checkbox>
                        </p>
                    </div>
                    <button class="button is-success">Create User</button>
                </form>
            </div>
        </div>
    
    </div>
@endsection

@section('scripts')
<script>
    var app = new Vue({
        el: '#app',
        data:{
            auto_password:true
        }
    });
</script>

@endsection