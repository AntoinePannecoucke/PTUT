package com.example.ptut;

import android.os.AsyncTask;
import android.util.Log;
import android.widget.TextView;
import org.json.JSONException;
import org.json.JSONObject;
import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.MalformedURLException;
import java.net.URL;
import javax.net.ssl.HttpsURLConnection;

public class RequestToAPI extends AsyncTask<Object, Void, String[]> {

    private TextView title_label, description;
    private static final String URL_API = "https://beaconmanagement.tk/api/api.php?key=";
    private static final String TITLE_KEY = "titre";
    private static final String DESCRIPTION_KEY = "description";

    public void onPostExecute(String[] result){
        title_label.setText(result[0]);
        description.setText(result[1]);
    }

    /**
     * @params title_label, description_label, key
     * @return title, description
     */

    @Override
    protected String[] doInBackground(Object[] objects) {
        title_label = (TextView) objects[0];
        description = (TextView) objects[1];
        String key = (String) objects[2];
        String[] retour = new String[2];
        try {
            URL url = new URL(URL_API + key);
            Log.e("requete", String.valueOf(url));
            HttpsURLConnection urlConnection = (HttpsURLConnection) url.openConnection();
            if (urlConnection.getResponseCode() == HttpsURLConnection.HTTP_OK){
                BufferedReader in = new BufferedReader(new InputStreamReader(urlConnection.getInputStream()));
                JSONObject result = new JSONObject(in.readLine());
                retour[0] = result.getString(TITLE_KEY);
                retour[1] = result.getString(DESCRIPTION_KEY);
                in.close();
            }
        } catch (MalformedURLException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        } catch (JSONException e) {
            e.printStackTrace();
        }
        return retour;
    }
}