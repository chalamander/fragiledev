using UnityEngine;
using System.Collections;
using UnityEngine.UI;

public class detectCollide : MonoBehaviour
{
    public GameObject ag;

    // Use this for initialization
    void Start()
    {


    }

    // Update is called once per frame
    void Update()
    {


    }

    private bool IsHand(Collider other)
    {
        if (other.transform.parent && other.transform.parent.parent && other.transform.parent.parent.GetComponent<Leap.Unity.HandModel>())
        {
            if (other.transform.parent.name.Equals("index") && other.name.Equals("bone3"))
            {
                return true;
            }
            return false;
        }
        else
            return false;
    }

    void OnTriggerEnter(Collider other)
    {
        if (IsHand(other))
        {
            GetComponent<Image>().color = Color.red;
            Debug.Log(other.ToString() + " entered collision with " + this.ToString());

        }
    }

    void OnTriggerExit(Collider other)
    {
        if (IsHand(other))
        {
            GetComponent<Image>().color = Color.white;
            Debug.Log(other.ToString() + " exited collision with " + this.ToString());

            //Do stuff here
            //Call the appropriate script
            //gameObject.GetComponent<ActionScript>().go();

            Application.LoadLevel("FragileDevelopmentScene");
            Instantiate(ag);

        }
    }
}

/*
 * 
 * var nextUsage;
 var delay=2;//two seconds delay.
 
 function Start()
 {
   nextUsage = Time.time + delay;
 }
 
 function Update()
 {
   if (Time.time > nextUsage)
   {
     nextUsage = Time.time + delay;

 * */
