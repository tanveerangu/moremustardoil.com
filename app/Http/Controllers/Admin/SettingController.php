<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index()
    {
        $setting = Setting::first();
        return view('admin.settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'site_name' => 'required|string|max:255',
            'light_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'dark_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'contact_emails.*' => 'nullable|email',
            'contact_phones.*' => 'nullable|string|max:20',
            'whatsapp_number' => 'nullable',
            'map_iframe' => 'nullable|string',
            'address' => 'nullable|string',
            'footer_text' => 'nullable|string',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
        ]);

        $setting = Setting::firstOrNew([]);

        if ($request->hasFile('light_logo')) {
            // Delete old file if exists
            if ($setting->light_logo && file_exists(public_path($setting->light_logo))) {
                unlink(public_path($setting->light_logo));
            }

            // Upload new file
            $lightLogo = $request->file('light_logo');
            $lightLogoName = time() . '_light.' . $lightLogo->getClientOriginalExtension();
            $lightLogo->move(public_path('uploads/logos'), $lightLogoName);
            $setting->light_logo = 'uploads/logos/' . $lightLogoName;
        }

        if ($request->hasFile('dark_logo')) {
            // Delete old file if exists
            if ($setting->dark_logo && file_exists(public_path($setting->dark_logo))) {
                unlink(public_path($setting->dark_logo));
            }

            // Upload new file
            $darkLogo = $request->file('dark_logo');
            $darkLogoName = time() . '_dark.' . $darkLogo->getClientOriginalExtension();
            $darkLogo->move(public_path('uploads/logos'), $darkLogoName);
            $setting->dark_logo = 'uploads/logos/' . $darkLogoName;
        }

        if ($request->hasFile('favicon')) {
            // Delete old file if exists
            if ($setting->favicon && file_exists(public_path($setting->favicon))) {
                unlink(public_path($setting->favicon));
            }

            // Upload new file
            $favicon = $request->file('favicon');
            $faviconName = time() . '_favicon.' . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('uploads/icons'), $faviconName);
            $setting->favicon = 'uploads/icons/' . $faviconName;
        }

        // Update text & JSON fields
        $setting->site_name = $request->site_name;
        $setting->contact_emails = json_encode($request->contact_emails);
        $setting->contact_phones = json_encode($request->contact_phones);
        $setting->whatsapp_number = $request->whatsapp_number;
        $setting->map_iframe = $request->map_iframe;
        $setting->address = $request->address;
        $setting->footer_text = $request->footer_text;
        $setting->social_links = json_encode([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
        ]);
        $setting->header_code = $request->header_code;
        $setting->footer_code = $request->footer_code;
        $setting->save();

        return redirect()->route('admin.settings.index')->with('success', 'Settings updated successfully!');
    }
}
