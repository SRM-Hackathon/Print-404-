package com.example.jish.edukado;


 import android.os.Bundle;
 import android.app.Activity;
 import android.content.Intent;
 import android.view.Menu;
 import android.view.View;
 import android.view.View.OnClickListener;
 import android.widget.Button;

    public class MainActivity extends Activity implements OnClickListener {

        Button b1;

        @Override
        protected void onCreate(Bundle savedInstanceState) {
            super.onCreate(savedInstanceState);
            setContentView(R.layout.activity_main);
            b1 = (Button)findViewById(R.id.button1);


            b1.setOnClickListener(this);

        }

        @Override
        public boolean onCreateOptionsMenu(Menu menu) {

            getMenuInflater().inflate(R.menu.main, menu);
            return true;
        }

        @Override
        public void onClick(View v) {

            Intent i = new Intent(getApplicationContext(), MainActivity2.class);
            startActivity(i);
            setContentView(R.layout.avtivity_next);
        }


    }