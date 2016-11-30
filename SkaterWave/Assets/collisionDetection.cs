using UnityEngine;
using System.Collections;
using UnityEngine.UI;

public class collisionDetection : MonoBehaviour
{

    

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
            GameObject.Find("WorldFactory").GetComponent<WorldFactory>().score++;
            return true;
        }
        else
            return false;
    }

    void OnTriggerEnter(Collider other)
    {
        if (IsHand(other))
        {
            Debug.Log(other.ToString() + " entered collision with " + this.ToString());
            GameObject go = GameObject.Find("adam zombi NEW");
            this.GetComponent<Animator>().SetBool("ded",true);
            this.GetComponent<zombie>().dead = true;

        }
    }
    /*
    void OnTriggerExit(Collider other)
    {
        if (IsHand(other))
        {
            GetComponent<Image>().color = Color.white;
            Debug.Log(other.ToString() + " exited collision with " + this.ToString());
        }
    }
    */
}