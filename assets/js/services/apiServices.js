export default async function fetchData(url){
    try{
        const response = await axios.get(url);

        if(response.status !== 200){
            throw new Error(`Failed with status code: ${response.status}`);
        } 
        
        return response.data;
    } catch(error){
        console.error('Unable to fetch data', error);
        throw error;
    }
}