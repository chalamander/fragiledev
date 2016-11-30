using UnityEngine;
using System.Collections;

public class zombie : MonoBehaviour {
    float time;
    public bool dead;
	// Use this for initialization
	void Start () {
	    
	}
	
	// Update is called once per frame
	void Update () {
        if (dead){

            transform.position += new Vector3(0, 0, 0.15f);

        }
        else
        {

            transform.position += new Vector3(0, 0, -0.15f);

        }
        time += Time.deltaTime;
        if (time > 6)
        {
            Destroy(this.gameObject);
        }


    }
}
