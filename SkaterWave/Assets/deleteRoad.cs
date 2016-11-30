using UnityEngine;
using System.Collections;

public class deleteRoad : MonoBehaviour {

    private float timeLeft;

	// Use this for initialization
	void Start () {
        timeLeft = 3;
	}
	
	// Update is called once per frame
	void Update () {
        //System.Console.Out.WriteLine("Hello World!");
        timeLeft -= Time.deltaTime;
        if (timeLeft < 0) {
            //System.Console.Out.WriteLine("Ah no, I'm dying!");
            for (int y = 0; y < 5; y++)
            {
                for (int x = 0; x < 5; x++)
                {
                    GameObject cube = GameObject.CreatePrimitive(PrimitiveType.Cube);
                    cube.AddComponent<Rigidbody>();
                    cube.transform.position = new Vector3(x, y, 0);
                }
            }
            Destroy(this.gameObject);
        }

    }
}
