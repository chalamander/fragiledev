using UnityEngine;
using System.Collections;

public class ActionScript : MonoBehaviour {

	// Use this for initialization
	void Start () {
        vol = 0.5f;
	}
	
	// Update is called once per frame
	void Update () {
	
	}

    float vol;

    public void go()
    {
        /*GameObject audioObj = GameObject.Find("AudioSource_TitleMusic");
        AudioSource audioSrc = audioObj.GetComponent<AudioSource>();
        if (audioSrc.volume > 0)
        {
            vol = audioSrc.volume;
            audioSrc.volume = 0;
        }
        else
        {
            audioSrc.volume = vol;
        }*/
        int waitTime = 2;
        float fadeTime = GameObject.Find("Fading").GetComponent<Fading>().beginFade(1);
        new WaitForSeconds(waitTime);
        Application.LoadLevel("FragileDevelopmentScene");
    }
}
