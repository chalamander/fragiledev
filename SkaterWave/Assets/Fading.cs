using UnityEngine;
using System.Collections;

public class Fading : MonoBehaviour {

    public Texture2D fadeOutTexture;
    public float fadeSpeed = 0.8f;

    private int drawDepth = -1000;
    private float alpha = 1.0f;
    private int fadeDir = -1;//in = -1, out = 1

    void onGUI()
    {
        alpha += fadeDir * fadeSpeed * Time.deltaTime;
        alpha = Mathf.Clamp(alpha, 0, 1);

        //Set colour of GUI
        GUI.color = new Color(GUI.color.r, GUI.color.g, GUI.color.b, alpha);
        GUI.depth = drawDepth;
        GUI.DrawTexture(new Rect(0, 0, Screen.width, Screen.height), fadeOutTexture);
    }

    public float beginFade(int direction)
    {
        fadeDir = direction;
        return fadeSpeed;
    }

    void OnLevelWasLoaded()
    {
        beginFade(-1);
    }




	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {
	
	}

    /*
    float fadeTime = GameObject.Find(Fading).getComponent<Fade>().beginFade(1);
    yield return new WaitForSeconds(waitTime);
    Application.loadLevel(Application.loadedLevel() + 1);
    
    
     */
}
