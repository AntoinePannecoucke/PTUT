package com.example.getjson;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        TextView title = findViewById(R.id.title_label);
        TextView description = findViewById(R.id.description_label);
        RequestToAPI request = new RequestToAPI();
        request.execute(title, description, "EF:E7:89:69:9D:C5");
    }
}