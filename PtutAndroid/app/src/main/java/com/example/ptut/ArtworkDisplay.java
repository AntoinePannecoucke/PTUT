package com.example.ptut;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.TextView;

public class ArtworkDisplay extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_artwork_display);

        TextView title = findViewById(R.id.title_label);
        TextView description = findViewById(R.id.description_label);
        RequestToAPI request = new RequestToAPI();
        request.execute(title, description, getIntent().getExtras().getString("Mac"));
    }
}