<div class="card-body">
    <h3 class="text-center mt-0 mb-3">
        <a href="#" class="logo">
            <img src="{{ asset('assets/images/logo-light.png') }}" height="24" alt="logo-img">
        </a>
    </h3>
    <h5 class="text-center mt-0 text-color"><b>Admin Sign In</b></h5>

    <form wire:submit.prevent="login" class="form-horizontal mt-3 mx-3">

        <div class="form-group mb-3">
            <div class="col-12">
                <input wire:model="email" class="form-control" type="email" placeholder="Email" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group mb-3">
            <div class="col-12">
                <input wire:model="password" class="form-control" type="password" placeholder="Password" required>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="col-12">
                <div class="checkbox checkbox-primary">
                    <input wire:model="remember" id="checkbox-signup" type="checkbox">
                    <label for="checkbox-signup" class="text-color">
                        Remember me
                    </label>
                </div>
            </div>
        </div>

        @if($errorMessage)
            <div class="alert alert-danger py-2">{{ $errorMessage }}</div>
        @endif

        <div class="form-group text-center mt-3">
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block btn-lg w-100" wire:loading.attr="disabled">
                    <span wire:loading.remove>Log In</span>
                    <span wire:loading>Logging in...</span>
                </button>
            </div>
        </div>

        <div class="form-group row mt-4 mb-0">
            <div class="col-sm-7">
                <a href="#" class="text-color">
                    <i class="mdi mdi-lock me-1"></i> Forgot your password?
                </a>
            </div>
            <div class="col-sm-5 text-end">
                <a href="#" class="text-color">Create an account</a>
            </div>
        </div>
    </form>
</div>
