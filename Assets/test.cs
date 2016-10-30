using UnityEngine;
using System.Collections;

public class test : MonoBehaviour {

    private GameObject scObj;
    private SerialController scComp;

    // Use this for initialization
    void Start () {

        scObj = GameObject.Find("SerialController");
        scComp = scObj.GetComponent<SerialController>();
    }
	
	// Update is called once per frame
	void Update () {
        //string in format "val, val, val,"
        string msg = scComp.ReadSerialMessage().Substring(1);
        //Debug.Log("The serial input is " + msg);
        string txtVal = msg.Split(',')[2];
        
        float value = float.Parse(txtVal);


        float moveAmount = (value / 40);

        Debug.Log("Input: " + txtVal + ", roadPos: " + gameObject.transform.position.x);

        if ((gameObject.transform.position.x/* + moveAmount*/) < 3.7){
            Debug.Log("Limit reached");
        }

        transform.Translate(new Vector3(moveAmount, 0, 0));
	}
}
