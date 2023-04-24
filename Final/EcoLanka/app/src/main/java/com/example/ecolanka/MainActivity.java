package com.example.ecolanka;

import android.os.Bundle;

import androidx.appcompat.app.AppCompatActivity;

import android.webkit.WebView;
import android.webkit.WebViewClient;

public class MainActivity extends AppCompatActivity {


    private WebView webView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // Find the WebView by its unique ID
        WebView webView = findViewById(R.id.web);

        // loading http://192.168.1.101/PHP/home.php url in the WebView.
        webView.loadUrl("http://192.168.1.101/PHP/home.php");

        //webView.loadUrl("http://10.10.84.118/PHP/home.php");


        // webView.loadUrl("http://10.0.2.2/PHP/home.php");


        // this will enable the javascript.
        webView.getSettings().setJavaScriptEnabled(true);

        // WebViewClient allows you to handle
        // onPageFinished and override Url loading.
        webView.setWebViewClient(new WebViewClient());
    }


    @Override
    public void onBackPressed()
    {
        WebView webView = (WebView) findViewById(R.id.web);
        if(webView.canGoBack()){
            webView.goBack();
        }else{
            super.onBackPressed();
        }
    }

}
