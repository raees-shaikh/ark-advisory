@component('mail::message')
    - **Details**:
    - **Name**: {{ $data->name }}
    - **Company Name**: {{ $data->company_name }}
    - **Email**: {{ $data->email }}
    - **Phone no.**: {{ $data->phone }}
    - **Message**: {{ $data->message }}
@endcomponent
