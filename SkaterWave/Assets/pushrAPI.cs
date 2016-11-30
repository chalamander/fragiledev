using UnityEngine;
using System.Collections;

public class pushrAPI : MonoBehaviour {

    private float pushrTimer;

    private int alive;
    private float timeSurvived;

	// Use this for initialization
	void Start () {
        pushrTimer = 0;

        alive = 0;//0 alive, 1 dead
        timeSurvived = 0;
	}
	
	// Update is called once per frame
	void Update () {
        pushrTimer += Time.deltaTime;
        timeSurvived += Time.deltaTime;

        if (pushrTimer > 0.25)
        {
            pushrTimer = 0;
            string url = "https://brumhack.webaddressgoeshere.com/ajax/gamestate";

            WWWForm form = new WWWForm();
            form.AddField("gs", alive);//0 alive, 1 dead
            form.AddField("score", GameObject.Find("WorldFactory").GetComponent<WorldFactory>().score);
            form.AddField("time", System.Math.Round(timeSurvived, 1).ToString());//time survived
            WWW www = new WWW(url, form);

            //yield return www;

            // check for errors
            if (www.error == null)
            {
                Debug.Log("WWW Ok!: " + www.text);
            }
            else
            {
                Debug.Log("WWW Error: " + www.error);
            }
        }

        //WWWForm form = new WWWForm();
        //form.AddField("gs", 0);//0 alive, 1 dead
        //form.AddField("score", 0);
        //form.AddField("time", timeSurvived.ToString());//time survived

        //WWW postRequest = new WWW("https://brumhack.webaddressgoeshere.com/ajax/gamestate?", form);



        
    }
}
