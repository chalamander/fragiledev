using UnityEngine;
using System.Collections;

public class test : MonoBehaviour {

    private GameObject scObj;
    private SerialController scComp;

    private float lastReading;  //Addition
    private float zeroMod;

    // Use this for initialization
    void Start () {

        scObj = GameObject.Find("SerialController");
        scComp = scObj.GetComponent<SerialController>();
        zeroMod = 0;
    }
	
	// Update is called once per frame
	void Update () {

        if (Input.GetKeyDown("space"))
        {
            zeroize();
        }
            //string in format "val, val, val,"
            string msg = scComp.ReadSerialMessage().Substring(1);
        //Debug.Log("The serial input is " + msg);
        string txtVal = msg.Split(',')[2];
        
        float value = float.Parse(txtVal);
        Debug.Log("value: " + value);
        //Kind of percentage of 90degrees but, divided by 100 to make it a reasonable amount
        float moveAmount = 0;
        if (value > 0)
        {
            moveAmount = -(value - 180) / 90;
        }
        else
        {
            moveAmount = -(value + 180) / 90;
        }
        
        Debug.Log("moveAmount: " + moveAmount);
        //lastReading = moveAmount;//Addition

        // Debug.Log("Input: " + txtVal + ", roadPos: " + gameObject.transform.position.x);

        if (gameObject.transform.position.x - 1 + moveAmount > 4.7) {
            //hit left wall
        }
        else if (gameObject.transform.position.x - 1 + moveAmount < -4.7) {
            //hit right wall
        }
        else {
            transform.Translate(new Vector3(moveAmount, 0, 0));
        }

        //Debug.Log("Got past if");

        
	}

    void zeroize()
    {
        //string in format "val, val, val,"
        string msg = scComp.ReadSerialMessage().Substring(1);
        //Debug.Log("The serial input is " + msg);
        string txtVal = msg.Split(',')[2];

        float value = float.Parse(txtVal);

        zeroMod = -value;
        Debug.Log("value: " + value +"zeroMod set to " + zeroMod);
    }
}
