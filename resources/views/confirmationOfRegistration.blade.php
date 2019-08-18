@extends('layouts.headerFooter')

@section('content')
    <!-- Confirmation of Registration -->
    <section class="registration-container">
        <form class="registration">
            <div class="registration__element">Введите код подтверждения</div>
            <input type="text" name="code" class="registration__element" placeholder="Код">
            <input type="submit" class="registration__element" value="Подтвердить">
        </form>
    </section>
    <!-- End of Confirmation of Registration -->
@endsection
