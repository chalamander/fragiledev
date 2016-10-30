using UnityEngine;
using System.Collections;

public class zombie : MonoBehaviour {
    float time;
	// Use this for initialization
	void Start () {
	    
	}
	
	// Update is called once per frame
	void Update () {
        transform.position += new Vector3(0, 0, -0.15f);
        time += Time.deltaTime;
        if (time > 6)
        {
            Destroy(this.gameObject);
        }

    }
}
