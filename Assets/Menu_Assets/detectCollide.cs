﻿using UnityEngine;
using System.Collections;

public class detectCollide : MonoBehaviour {

	// Use this for initialization
	void Start () {
	
	}
	
	// Update is called once per frame
	void Update () {


	
	}

    private bool IsHand(Collider other)
    {
        if (other.transform.parent.name.Equals("index") && other.name.Equals("bone3") && other.transform.parent && other.transform.parent.parent && other.transform.parent.parent.GetComponent<Leap.Unity.HandModel>())
            return true;
        else
            return false;
    }

    void OnTriggerEnter(Collider other)
    {
        if (IsHand(other))
        {
            Debug.Log(other.ToString() + " collided with " + this.ToString());
            
        }
    }
}