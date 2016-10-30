using UnityEngine;
using System.Collections;

public class WorldFactory : MonoBehaviour {

    public GameObject thing1;
    public float thing1Delay;
    private float thing1Time;
    
    public GameObject thing2;
    public float thing2Delay;
    private float thing2Time;

    public GameObject thing3;
    public float thing3Delay;
    private float thing3Time;

    // Use this for initialization
    void Start () {
        thing1Time = 0;
        thing2Time = 0;
        thing3Time = 0;
    }
	
	// Update is called once per frame
	void Update () {
        //Use delta time constant speed
        //every x time make child and append to world

        thing1Time += Time.deltaTime;
        if (thing1Time > thing1Delay){
            thing1Time = 0;
            GameObject temp = Instantiate(thing1);
            temp.transform.parent = gameObject.transform;
            temp.transform.position = new Vector3(transform.position.x, transform.position.y, transform.position.z);
        }

        thing2Time += Time.deltaTime;
        if (thing2Time > thing2Delay)
        {
            thing2Time = 0;
            GameObject temp = Instantiate(thing2);
            temp.transform.parent = gameObject.transform;

            temp.transform.position = new Vector3(transform.position.x  +Random.Range(-5.0f, 5.0f), transform.position.y, transform.position.z);
            
        }
        thing3Time += Time.deltaTime;
        if (thing3Time > thing3Delay)
        {
            thing3Time = 0;
            GameObject temp = Instantiate(thing3);
            temp.transform.parent = gameObject.transform;
            temp.transform.position = new Vector3(transform.position.x, transform.position.y - 2f, transform.position.z);
        }
    }
}
