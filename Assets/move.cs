﻿using UnityEngine;
using System.Collections;

public class move : MonoBehaviour {
    float time = 0;
    // Use this for initialization
    void Start () {
       
	}
	
	// Update is called once per frame
	void Update () {
        transform.position += new Vector3(0,0,-0.11f);
        time += Time.deltaTime;
        if (time > 10) {
            Destroy(this.gameObject);
        }

	}
}
