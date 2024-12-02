@extends('layouts.webmaster')
@section('web_content')
   
            <div id="success-alert">
            @if(session('message'))
                <x-comon_com.success_massages :msg="session('message')" class="success_massages"  /> 
            @endif
        </div>

        <div id="error-alert">
            @if(session('error'))
            <x-comon_com.success_massages :msg="session('error')" class="error_massages" />
            @endif
        </div>
          



    <main>
<!-- ডেটা দেখানো -->

    @if(Session::has('info'))
        @php 
            $info = Session::get('info');
            
        @endphp

        <ul>
        <li>Name: {{ $info['name'] }}</li>
        <li>Email: {{ $info['email'] }}</li>
        <li>Phone: {{ $info['phone'] }}</li>
        </ul>

    @endif


        


        @include('frontend.common.form.form1')
    </main>






    <script>
    // Success message timeout
    setTimeout(() => {
        const successAlert = document.getElementById('success-alert');
        if (successAlert) {
            successAlert.classList.add('fade-out');
        }
    }, 5000); // 5000ms = 5 seconds

    // Error message timeout
    setTimeout(() => {
        const errorAlert = document.getElementById('error-alert');
        if (errorAlert) {
            errorAlert.classList.add('fade-out');
        }
    }, 5000); // 5000ms = 5 seconds
</script>

  
@endsection 


