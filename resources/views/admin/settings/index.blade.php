@extends('layouts.app')

@section('title', 'Website Settings')

@section('content')
    <div class="container-fluid">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
            aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                <li class="breadcrumb-item active">Website Settings</li>
            </ol>
        </nav>
        <div class="card">
            <div class="card-header">
                <h3>Website Settings</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="site_name" class="form-label">Site Name <span class="text-danger">*</span></label>
                            <input type="text" id="site_name" name="site_name"
                                class="form-control @error('site_name') is-invalid @enderror"
                                value="{{ old('site_name', $setting->site_name ?? '') }}">
                            @error('site_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="whatsapp_number" class="form-label">Whatsapp No. <span
                                    class="text-danger">*</span></label>
                            <input type="tel" id="whatsapp_number" name="whatsapp_number"
                                class="form-control @error('whatsapp_number') is-invalid @enderror"
                                value="{{ old('whatsapp_number', $setting->whatsapp_number ?? '') }}">
                            @error('whatsapp_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="light_logo" class="form-label">Light Logo</label>
                            <input type="file" id="light_logo" name="light_logo"
                                class="form-control @error('light_logo') is-invalid @enderror">
                            @error('light_logo')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            @if (isset($setting->light_logo))
                                <img src="{{ asset($setting->light_logo) }}" alt="Light Logo" class="mt-2" width="150">
                            @endif
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="dark_logo" class="form-label">Dark Logo</label>
                            <input type="file" id="dark_logo" name="dark_logo"
                                class="form-control @error('dark_logo') is-invalid @enderror">
                            @error('dark_logo')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            @if (isset($setting->dark_logo))
                                <img src="{{ asset($setting->dark_logo) }}" alt="Dark Logo" class="mt-2" width="150">
                            @endif
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="favicon" class="form-label">Favicon</label>
                            <input type="file" id="favicon" name="favicon"
                                class="form-control @error('favicon') is-invalid @enderror">
                            @error('favicon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            @if (isset($setting->favicon))
                                <img src="{{ asset($setting->favicon) }}" alt="Favicon" class="mt-2" width="32">
                            @endif
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="map_iframe" class="form-label">Google Map Embed (iFrame)</label>
                            <textarea name="map_iframe" id="map_iframe" class="form-control @error('map_iframe') is-invalid @enderror">{{ old('map_iframe', $setting->map_iframe ?? '') }}</textarea>
                            @error('map_iframe')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea name="address" id="address" class="form-control @error('address') is-invalid @enderror">{{ old('address', $setting->address ?? '') }}</textarea>
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class=" col-md-4 mb-3">
                            <label for="footer_text" class="form-label">Footer Text</label>
                            <textarea name="footer_text" id="footer_text" class="form-control  @error('footer_text') is-invalid @enderror">{{ old('footer_text', $setting->footer_text ?? '') }}</textarea>
                            @error('footer_text')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contact Emails</label>
                            <div id="email_fields">
                                @foreach (old('contact_emails', (array) json_decode($setting->contact_emails ?? '[]')) as $index => $email)
                                    <div class="input-group mb-2">
                                        <input type="text" name="contact_emails[]"
                                            class="form-control @error('contact_emails.' . $index) is-invalid @enderror"
                                            value="{{ $email }}">
                                        <button type="button" class="btn btn-danger"
                                            onclick="removeField(this)">X</button>
                                    </div>
                                    @error('contact_emails.' . $index)
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-sm btn-secondary" onclick="addEmailField()">+ Add
                                Email</button>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Contact Phone Numbers</label>
                            <div id="phone_fields">
                                @foreach (old('contact_phones', (array) json_decode($setting->contact_phones ?? '[]')) as $index => $phone)
                                    <div class="input-group mb-2">
                                        <input type="text" name="contact_phones[]"
                                            class="form-control  @error('contact_phones.' . $index)is-invalid @enderror"
                                            value="{{ $phone }}">
                                        <button type="button" class="btn btn-danger"
                                            onclick="removeField(this)">X</button>
                                    </div>
                                    @error('contact_phones.' . $index)
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-sm btn-secondary" onclick="addPhoneField()">+ Add
                                Phone</button>
                        </div>

                        <h4>Social Media Links</h4>

                        <div class="col-md-3 mb-3">
                            <label for="facebook" class="form-label">Facebook</label>
                            <input type="url" id="facebook" name="facebook"
                                class="form-control @error('facebook') is-invalid @enderror"
                                value="{{ old('facebook', json_decode($setting->social_links ?? '{}', true)['facebook'] ?? '') }}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="twitter" class="form-label">Twitter</label>
                            <input type="url" id="twitter" name="twitter"
                                class="form-control @error('twitter') is-invalid @enderror"
                                value="{{ old('twitter', json_decode($setting->social_links ?? '{}', true)['twitter'] ?? '') }}">
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="url" id="instagram" name="instagram"
                                class="form-control @error('instagram') is-invalid @enderror"
                                value="{{ old('instagram', json_decode($setting->social_links ?? '{}', true)['instagram'] ?? '') }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="youtube" class="form-label">Youtube</label>
                            <input type="url" id="youtube" name="youtube"
                                class="form-control @error('youtube') is-invalid @enderror"
                                value="{{ old('Youtube', json_decode($setting->social_links ?? '{}', true)['youtube'] ?? '') }}">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="header_code" class="form-label">Header Code</label>
                            <textarea name="header_code" id="header_code" class="form-control @error('header_code') is-invalid @enderror">{{ old('header_code', $setting->header_code ?? '') }}</textarea>
                            @error('header_code')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="footer_code" class="form-label">Footer Code</label>
                            <textarea name="footer_code" id="footer_code" class="form-control @error('footer_code') is-invalid @enderror">{{ old('footer_code', $setting->footer_code ?? '') }}</textarea>
                            @error('footer_code')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success">Save Settings</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function addEmailField() {
            let div = document.createElement('div');
            div.classList.add('input-group', 'mb-2');
            div.innerHTML = `<input type="email" name="contact_emails[]" class="form-control">
                             <button type="button" class="btn btn-danger" onclick="removeField(this)">X</button>`;
            document.getElementById('email_fields').appendChild(div);
        }

        function addPhoneField() {
            let div = document.createElement('div');
            div.classList.add('input-group', 'mb-2');
            div.innerHTML = `<input type="text" name="contact_phones[]" class="form-control">
                             <button type="button" class="btn btn-danger" onclick="removeField(this)">X</button>`;
            document.getElementById('phone_fields').appendChild(div);
        }

        function removeField(button) {
            button.parentElement.remove();
        }
    </script>
@endsection
